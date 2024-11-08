public function store(Request $request){

$screening_id = $request->screening_id;

$seat_ids = $request->seat_id;

foreach($seat_ids as $seat_id){

    Seatreserved::create($seat_id,$screening_id);

}
}
