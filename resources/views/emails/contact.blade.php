<?php
$mytime = Carbon\Carbon::now();
?>
Ati fost contactat in data de <?php echo $mytime->format('d-m-Y'); ?> <br>
Nume: {{ $contact['firstName']}}<br>
Prenume: {{ $contact['firstName']}}<br>
Mesaj: {{ $contact['message']}}<br>