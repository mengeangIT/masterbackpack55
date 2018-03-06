<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Illuminate\Support\Facades\DB;

class TblOrder extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'tbl_orders';
    protected $primaryKey = 'id';
     public $timestamps = true;
    // protected $guarded = ['id'];
     protected $fillable = ['cust_id','total_qty','total_amt','total_tax','total_fee','total_dis','total_payable','date','time'];
    // protected $hidden = [];
    // protected $dates = [];


    static function allOrderData($request,$limit=10){
        $q = $request->q;
        $m = DB::table('customers')->join('tbl_orders','customers.id','tbl_orders.cust_id')
            ->select('customers.*',
                DB::raw('tbl_orders.id as order_id'),
                'tbl_orders.total_qty',
                'tbl_orders.total_amt',
                'tbl_orders.total_tax',
                'tbl_orders.total_dis',
                'tbl_orders.total_fee',
                'tbl_orders.total_payable',
                'tbl_orders.date',
                'tbl_orders.time',
                'tbl_orders.status')
            ->orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){

                $query->where('name','like',"%{$q}%")
                    ->orWhere('phone','like',"%{$q}%")
                    ->orWhere('total_amt','like',"%{$q}%")
                    ->orWhere('total_fee','like',"%{$q}%")
                    ->orWhere('total_dis','like',"%{$q}%")
                    ->orWhere('total_payable','like',"%{$q}%")
                ;

            });
        }
        return $m->paginate($limit);
    }

    static function newOrderData($request,$limit=10){
        $q = $request->q;
        $m = DB::table('customers')->join('tbl_orders','customers.id','tbl_orders.cust_id')
            ->select('customers.*',
                DB::raw('tbl_orders.id as order_id'),
                'tbl_orders.total_qty',
                'tbl_orders.total_amt',
                'tbl_orders.total_tax',
                'tbl_orders.total_dis',
                'tbl_orders.total_fee',
                'tbl_orders.total_payable',
                'tbl_orders.date',
                'tbl_orders.time',
                'tbl_orders.status')
            ->where('status','=','NEW')
            ->orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){

                $query->where('name','like',"%{$q}%")
                    ->orWhere('phone','like',"%{$q}%")
                    ->orWhere('total_amt','like',"%{$q}%")
                    ->orWhere('total_fee','like',"%{$q}%")
                    ->orWhere('total_dis','like',"%{$q}%")
                    ->orWhere('total_payable','like',"%{$q}%")
                ;

            });
        }
        return $m->paginate($limit);
    }

    static function paidOrderData($request,$limit=10){
        $q = $request->q;
        $m = DB::table('customers')->join('tbl_orders','customers.id','tbl_orders.cust_id')
            ->select('customers.*',
                DB::raw('tbl_orders.id as order_id'),
                'tbl_orders.total_qty',
                'tbl_orders.total_amt',
                'tbl_orders.total_tax',
                'tbl_orders.total_fee',
                'tbl_orders.total_dis',
                'tbl_orders.total_payable',
                'tbl_orders.date',
                'tbl_orders.time',
                'tbl_orders.status')
            ->where('status','=','PAID')
            ->orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){

                $query->where('name','like',"%{$q}%")
                    ->orWhere('phone','like',"%{$q}%")
                    ->orWhere('total_amt','like',"%{$q}%")
                    ->orWhere('total_fee','like',"%{$q}%")
                    ->orWhere('total_dis','like',"%{$q}%")
                    ->orWhere('total_payable','like',"%{$q}%")
                ;

            });
        }
        return $m->paginate($limit);
    }

    static function cancelOrderData($request,$limit=10){
        $q = $request->q;
        $m = DB::table('customers')->join('tbl_orders','customers.id','tbl_orders.cust_id')
            ->select('customers.*',
                DB::raw('tbl_orders.id as order_id'),
                'tbl_orders.total_qty',
                'tbl_orders.total_amt',
                'tbl_orders.total_tax',
                'tbl_orders.total_dis',
                'tbl_orders.total_fee',
                'tbl_orders.total_payable',
                'tbl_orders.date',
                'tbl_orders.time',
                'tbl_orders.status')
            ->where('status','=','CANCEL')
            ->orderBy('id','ASC');

        if ($q != null && $q != ''){
            $m->where(function ($query) use($q){

                $query->where('name','like',"%{$q}%")
                    ->orWhere('phone','like',"%{$q}%")
                    ->orWhere('total_amt','like',"%{$q}%")
                    ->orWhere('total_fee','like',"%{$q}%")
                    ->orWhere('total_dis','like',"%{$q}%")
                    ->orWhere('total_payable','like',"%{$q}%")
                ;

            });
        }
        return $m->paginate($limit);
    }
}
