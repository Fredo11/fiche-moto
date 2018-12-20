{!! $passports->links() !!}


public function index()
    {
        $passports=\App\Passport::latest()->paginate(8);
        return view('index',compact('passports'))
        ->with('i', (request()->input('page', 1) - 1) * 8);
    }
