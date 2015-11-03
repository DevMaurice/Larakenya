<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Membership;
use App\Repositories\MemberRepository;
use Illuminate\Http\Request;

class MemberController extends Controller
{

      /**
     * The member repository instance.
     *
     * @var memberRepository
     */
    protected $members;

    /**
     * Create a new controller instance.
     *
     * @param  memberRepository  $members
     * @return void
     */
    public function __construct(MemberRepository $members)
    {
        $this->members = $members;
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members=$this->members->all();

        return view('member.index',compact('members'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Membership::create($request->all());

        return redirect('/members');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $member=Membership::findorfail($id);
        
        return view('member.create',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {
        $member=Membership::findorfail($id);

        return view('member.create',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $member=Membership::findorfail($id);

         $member-> update($request->all());

         return redirect('/members');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $member=Membership::findorfail($id);

         $member-> delete($request->all());
         
         return redirect('/members');
    }
}
