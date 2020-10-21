<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;
use App\Models\Result;
use App\Models\ResultDetails;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $user = auth()->user();
        $data = [];
        if($user->email == "admin@gmail.com") {
            $viewName = 'admin';

            $returnData = DB::table('results')
            ->join('users', 'results.user_id', '=', 'users.id')
            ->get();

            $data['no_of_test'] = count($returnData);
            $no_of_user = [];
            $pass = $fail = 0;
            foreach($returnData as $key => $value) {
                if(!array_key_exists($value->user_id,$no_of_user)) {
                    $no_of_user[$value->user_id] = $value;
                }
                if($value->status == 'fail') {
                    $fail++;
                } else {
                    $pass++;
                }
                
            }
            $data['no_of_user'] = count($no_of_user);
            $data['total_fail'] = $fail;
            $data['total_pass'] = $pass;
        } else {
            $viewName = 'submit';
        }
        return view($viewName,['data' => $data]);
    }

    public function starttest() {
        $client = new Client(); 
        $url = 'https://opentdb.com/api.php?amount=10';
        $params = $headers = [];
        $response = $client->request('POST', $url, ['json' => $params,'headers' => $headers]);
        $result = $response->getBody();
        $data = json_decode($result, true);
        $data = isset($data['results']) ? $data['results'] : [];
    
        // all options 
        foreach($data as $key => $value) {
            $data[$key]['all'] = array_merge($value['incorrect_answers'],(array)$value['correct_answer']);
            shuffle($data[$key]['all']);

        }
        return view('home',['data' => $data]);
    }

    public function submit(Request $req) {
        $data = $req->input();

        if(!empty($data) && count($data) > 1) {
            $result = new Result;
            $result->no_of_question = 10;
            $result->user_id = \Auth::user()->id;
            $result->save();
            $id = $result->id;
            // check currect answer
            if (array_key_exists("_token",$data)) {
                unset($data['_token']);
            }
            $correct_answer = 0;
            foreach($data as $key => $value) {
                $check = explode('___',$value);
                if(!empty($check)) {
                    $details = new ResultDetails;
                    $details->question = $key;
                    $details->correct_answer = $check[1];
                    $details->submit_answer = $check[0];
                    if($check[0] == $check[1]) {
                        $correct_answer++;
                        $details->question_status = 'correct';
                    } else {
                        $details->question_status = 'wrong';
                    }
                    $details->result_id = $id;
                    $details->save();
                }
            }

            $res = Result::find($id);
            $res->no_of_correct_answer = $correct_answer;
            $res->status = $correct_answer > 4 ? 'pass' : 'fail';
            $res->save();
            return redirect('/submitexam')->with('status', 'Exam Successfully completed. you score '.$correct_answer .' / 10');
        } else {
            return redirect('/submitexam');
        }
        
    }

    public function getresult() {
        // fetch all test data of this user;
        $returnData = Result::where('user_id','=',\Auth::user()->id)->get();

        return view('view',['data' => $returnData]);
    }
    public function getresultdetails($id) {
        // fetch all test data of this user;
        $returnData = DB::table('result_details')
        ->select('result_details.*')
        ->join('results', 'results.id', '=', 'result_details.result_id')
        ->where('results.user_id', \Auth::user()->id)
        ->where('result_details.result_id',$id)
        ->get();
        return view('viewdetails',['data' => $returnData,'test_id'=>$id]);
    }

    public function getAllUser(Request $req) {
        // $data = $req->name();
        // print_r($data);
        // die;
        $returnData = DB::table('results')
        ->selectRaw('users.name,count(results.id) as no_of_tests,sum(case when results.status = "fail" then 1 else 0 end) as no_of_fail,sum(case when results.status = "pass" then 1 else 0 end) as no_of_pass')
        ->join('users', 'users.id', '=', 'results.user_id');
        if(!empty($req->input('name'))) {
            $returnData->orWhere('name', 'like', '%' . $req->input('name') . '%');
        }
        
        if(!empty($req->input('sort')) && !empty($req->input('direction'))) {
            $returnData->orderBy($req->input('sort'), $req->input('direction'));
        }
        $returnData = $returnData->groupBy('results.user_id')
        ->paginate(2);
        return view('participents',['data' => $returnData]);
    }
}
