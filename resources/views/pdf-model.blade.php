
<center><img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')
                        ->size(300)->errorCorrection('H')
                        ->generate($name.'  '.$morada.'  '.$codpostal.'-'.$local)) !!} "></center>
<center>{{ $name }}</center>
<center>{{ $morada }}</center>
<center>{{ $codpostal }}</center>
<center>{{ $local }}</center>
