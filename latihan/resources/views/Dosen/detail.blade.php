public function show($id)
{
    $dosen = Dosen::findOrFail($id);
    return view('Dosen.detail', compact('dosen'));
}