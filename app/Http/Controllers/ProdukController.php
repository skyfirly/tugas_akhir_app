public function index()
{
    $nama = "Future Princess";
    return view('welcome' compact('nama'));
}
