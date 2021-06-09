<?php
namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Datatables;
use Illuminate\Support\Facades\DB;
use PHPUnit\Runner\Hook;

class HotelCRUDController extends Controller{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        if(request()->ajax()) {
            
        return datatables()->of(Hotel::select('*'))
        ->addColumn('action', 'hotels.action')
        ->rawColumns(['action'])
        ->addIndexColumn()
        ->make(true);
        }
        return view('hotels.index');
    }


    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view('hotels.create');
    }


    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){

        $request->validate([
        'namaHotel' => 'required',
        'deskripsiHotel' => 'required',
        'hargaKamar' => 'required|numeric',
        'gambarHotel1' => 'required|image|mimes:jpg,jpeg,png',
        'gambarHotel2' => 'image|mimes:jpg,jpeg,png',
        'gambarHotel3' => 'image|mimes:jpg,jpeg,png',
        'gambarHotel4' => 'image|mimes:jpg,jpeg,png',
        'gambarHotel5' => 'image|mimes:jpg,jpeg,png',
        'stokKamar' => 'required|numeric',
        'bintang' => 'required|numeric',
        'lokasi' => 'required',

        ]);
        
        $hotel = new Hotel;
        $hotel->namaHotel = $request->namaHotel;
        $hotel->deskripsiHotel = $request->deskripsiHotel;
        $hotel->hargaKamar = $request->hargaKamar;

        for($i=1;$i<6;$i++){
            if ($request->{"gambarHotel" . $i} == null) {
                $hotel->{"gambarHotel" . $i} = 'def.png';
                
            } else {
                $image = $request->file("gambarHotel" . $i);
                $name = time() . rand(1, 99999) . '.' . $request->{"gambarHotel" . $i}->getClientOriginalExtension();
                $Path = public_path('/img/hotel');
                $image->move($Path, $name);
                $hotel->{"gambarHotel" . $i} = $name;
            }
        }

        $hotel->stokKamar = $request->stokKamar;
        $hotel->bintang = $request->bintang;
        $hotel->lokasi = $request->lokasi;
        $flag = $hotel->save();

        if($flag){ 
            return redirect()->route('hotels.index')
            ->with('success','hotel has been created successfully.');
        }
    }


    /**
    * Display the specified resource.
    *
    * @param  \App\hotel  $hotel
    * @return \Illuminate\Http\Response
    */
    public function show(Hotel $hotel)
    {
        // return view('hotels.show',compact('hotel'));
    } 

    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\hotel  $hotel
    * @return \Illuminate\Http\Response
    */
    public function edit(Request $request, $id){
        
        $hotel = DB::table('hotel')->where('id',$id)->get();
        // dd($hotel);
        return view('hotels.edit', compact('id','hotel'));
    }
    
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\hotel  $hotel
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        $request->validate([
            'hargaKamar' => 'numeric',
            'gambarHotel1' => 'image|mimes:jpg,jpeg,png',
            'gambarHotel2' => 'image|mimes:jpg,jpeg,png',
            'gambarHotel3' => 'image|mimes:jpg,jpeg,png',
            'gambarHotel4' => 'image|mimes:jpg,jpeg,png',
            'gambarHotel5' => 'image|mimes:jpg,jpeg,png',
            'stokKamar' => 'numeric',
            'bintang' => 'numeric'
            ]);

        $hotel = Hotel::find($id);
            $hotel->namaHotel = $request->namaHotel;
            $hotel->deskripsiHotel = $request->deskripsiHotel;
            $hotel->hargaKamar = $request->hargaKamar;

            for($i=1;$i<6;$i++){
                if ($request->{"gambarHotel" . $i} == null) {
                    if($hotel->{"gambarHotel" . $i} == $request->{"hotelPicture" . $i}){
                        continue;
                    }
                    else{
                        $hotel->{"gambarHotel" . $i} = 'def.png';
                    }
                } else {
                    $image = $request->file("gambarHotel" . $i);
                    $name = time() . rand(1, 99999) . '.' . $request->{"gambarHotel" . $i}->getClientOriginalExtension();
                    $Path = public_path('/img/hotel');
                    $image->move($Path, $name);
                    $hotel->{"gambarHotel" . $i} = $name;
                }
            }
            
            $hotel->stokKamar = $request->stokKamar;
            $hotel->bintang = $request->bintang;
            $hotel->lokasi = $request->lokasi;
            $flag = $hotel->save();

        if($flag){
            return redirect()->route('hotels.index')
            ->with('success','Hotel Has Been updated successfully');
        }
    }


    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Hotel  $hotel
    * @return \Illuminate\Http\Response
    */
    public function destroy(Request $request){
        $com = Hotel::where('id',$request->id)->delete();
        return Response()->json($com);
    }
}
