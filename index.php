<?

ob_start();

// files
$files = [
    '2e',
    '1e',
    '50c',
    '20c',
    '10c',
    '5c',
    '2c',
    '1c',
];

$countries = [
    'Andorra 2014',
    'Austria 2002',
    'Belgium 2002',
    'Belgium 2008',
    'Belgium 2014',
    'Cyprus 2008',
    'Estonia 2011',
    'Finland 2002',
    'France 2002',
    'Germany 2002',
    'Greece 2002',
    'Ireland 2002',
    'Italy 2002',
    'Latvia 2014',
    'Lithuania 2015',
    'Luxembourg 2002',
    'Malta 2008',
    'Monaco 2001',
    'Monaco 2006',
    'Netherlands 2002',
    'Netherlands 2014',
    'Portugal 2002',
    'San Marino 2002',
    'Slovakia 2009',
    'Slovenia 2007',
    'Spain 2002',
    'Spain 2010',
    'Vatican 2002',
    'Vatican 2005',
    'Vatican 2006',
    'Vatican 2014',
];


echo '<table>';

foreach ($countries as $country) {
    echo '<tr>';
    echo '<td>' . $country . '</td>';

    foreach ($files as $file) {
        echo '<td><img src="images/' . $country . '/' . $file . '.gif" class="coin' . $file . '"></td>';
    }

    echo '</tr>';
}

echo '</table>';

$HTML = ob_get_clean();

?>
<html>
<head>
    <title>Euro coins</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<? echo $HTML; ?>
<p>2016 &copy; Created by <a href="https://github.com/rozinko" target="_blank">Roman Rozinko</a>. <a href="https://github.com/rozinko/eurocoins" target="_blank">Project on GitHub</a>.</p>
<p></p>
</body>
</html>
