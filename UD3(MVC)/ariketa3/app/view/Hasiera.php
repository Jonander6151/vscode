<html>
<head>
    <link rel="stylesheet" href="Hasiera.css">
</head>
<body>
<h1>Ikasleak</h1>
<table>
    <tr><th>IZENA</th><th>EMAIL-A</th><th>IRAKASGAIAK</th><th>ERAGIKETAK</th></tr> 
    <?php foreach($ikasleDatuak as $ikaslea): ?>
        <tr>
            <td><?php echo $ikaslea["izena"] ?></td><td><?php echo $ikaslea["email"] ?></td><td><button type="submit" name="action" value="editatu_irakasgaiak">IRAKASGAIAK</button></td><td><button type="submit" name="action" value="editatu">EDITATU</button><button type="submit" name="action" value="ezabatu">EZABATU</button></td>
        </tr>
    <?php endforeach; ?>
</table>
<button type="submit" name="action" value="gehitu">Sortu Ikaslea</button>

</body>
</html>