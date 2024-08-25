<?php

namespace App\Http\Controllers\User\Settings;

use Illuminate\Http\Request;

use App\Models\SellerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreUserSellerRequest;
use App\Interface\User\Seller\SellerRequestInterface;
use App\Repository\User\Seller\SellerRequestRepository;

class UserSellerRegisterationController extends Controller
{
    protected $SellerRequestRepo;
    public function __construct(SellerRequestInterface $SellerRequestRepo){
$this->SellerRequestRepo = $SellerRequestRepo;

}
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUserSellerRequest $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email',
        // ]);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        // if ($validator->validate()['email'] != auth()->user()->email)
        //     return redirect()->back()->with('error', 'email isn\'t correct ');
        // if(SellerRequest::where('user_id',auth()->user()->id)->first()!=null)
        // return redirect()->back()->with('error', 'request alredy send');
        $this->SellerRequestRepo->CreateSellerRequest($request->validated()['email']);
        //SellerRequest::create(['user_id' => auth()->user()->id, 'email' => $request->validated()['email']]);
        return redirect()->back()->with('success', 'request sent successfully');
    }

}
