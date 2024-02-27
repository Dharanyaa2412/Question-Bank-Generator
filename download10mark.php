
<!DOCTYPE html>
<html>
<head>
    <title>10mark</title>
    
</head>
<body>
    <h1><b>10 Mark</b></h1>
    <ol>
        <?php
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=programsix', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $selectedColumns = ['Question1', 'Question2', 'Question3', 'Question4', 'Question5'];
            $columnsString = implode(',,,, ', $selectedColumns);
            $limit = 10;
            $stmt = $pdo->prepare("SELECT * FROM 10mark LIMIT :limit");
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->execute();

            $dataList = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $pdo = null; 
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
        shuffle($dataList);
        foreach ($dataList as $row) {
            echo '<li>'. $row['Question1'] . '</li>';
            //echo '<br>';
            
        }
        $csvFileName = 'data.doc';
         header('Content-Type: text/doc');
         header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

         $csvFile = fopen('php://output', 'w');

         //fputcsv($csvFile, $row);

        foreach ($dataList as $row) {
        
}

fclose($csvFile);
        ?>
    </ol>
</body>
</html>
