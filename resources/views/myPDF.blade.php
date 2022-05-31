<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <style>
 .page-break {
 page-break-after: always;
 }
</style>
</head>
<body>
<h1>Pagina 1</h1>
<div class="page-break"></div>
<h1>lopez</h1>
<p>un buen proyecto conlleva un buen trabajo .</p>
<p>gracias por lo aprendido y el tiempo brindado .</p>
<script type="text/php">
 if ( isset($pdf) ) {
 $pdf->page_script('
 $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
 $pdf->text(270, 730, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
 ');
 }
</script>
    
</body>
</html>