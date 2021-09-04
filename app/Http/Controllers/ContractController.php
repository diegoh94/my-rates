<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contract;
use App\Imports\RatesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\ContractRequest;

class ContractController extends Controller
{
    public function dashboard() {    	

        $contracts = Contract::all();    	
        return view('dashboard')->with(compact('contracts'));
    }

    public function store(ContractRequest $request) { 
    	
        $file = $request->file('file');

        $contract = new Contract();
        $contract->name = $request->name;
        $contract->date = $request->date;
        $contract->save();

        Excel::import(new RatesImport($contract->id), $file);
    	
        session()->flash('notification', '¡Su registro ha sido exitoso!');

        return redirect('/dashboard');
    }

    public function show(Contract $contract){
        
        return view('contracts.details')->with(compact('contract'));
    }
}
