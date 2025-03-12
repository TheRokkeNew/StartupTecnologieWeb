<?php
use App\Models\Transazione;
use Illuminate\Http\Request;

class TransazioneController extends Controller
{
    public function index()
    {
        $transazioni = Transazione::all();
        return view('transazioni.index', compact('transazioni'));
    }

    public function create()
    {
        return view('transazioni.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'categoria' => 'required',
            'importo' => 'required|numeric',
            'data' => 'required|date',
        ]);

        Transazione::create($request->all());
        return redirect()->route('transazioni.index');
    }

    public function destroy(Transazione $transazione)
    {
        $transazione->delete();
        return redirect()->route('transazioni.index');
    }
}