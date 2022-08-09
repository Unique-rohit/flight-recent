<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">




</head>
<body style="margin:50px;">
    <h1>Airline detailsgfgfg</h1>
    <br>
    <table >
        <thead>  
            <!-- <tr>
                <th>did</th>
                <th>airport</th>
                <th>timezone</th>
                <th>iata</th>
                <th>icao</th>
                <th>terminal</th>
                <th>gate</th>
                <th>delay</th>
                <th>scheduled</th>
                <th>estimated</th>
                <th>actual</th>
                <th>estimated_runway</th>
                <th>actual_runway</th>
            </tr> -->
            <!-- <tr>
                <td></td>
            </tr> -->


            <!-- <tr>
                <th>aid</th>
                <th>airport</th>
                <th>timezone</th>
                <th>iata</th>
                <th>icao</th>
                <th>terminal</th>
                <th>gate</th>
                <th>bagage</th>
                <th>delay</th>
                <th>scheduled</th>
                <th>estimated</th>
                <th>actual</th>
                <th>estimated_runway</th>
                <th>actual_runway</th>
            </tr>
           -->
            <!-- <tr>
                <th>tid</th>
                <th>name</th>
                <th>iata</th>
                <th>icao</th>
            </tr> -->

            <!-- <tr>
                <th>fid</th>
                <th>flight_date</th>
                <th>flight_status</th>
                <th>aircraft_info</th>
                <th>live</th>
            </tr> -->

            <!-- <tr>
                <th>iid</th>
                <th>flight_date</th>
                <th>flight_status</th>
                <th>aircraft</th>
                <th>live</th>
            </tr> -->

        </thead>
        <tbody>
             <?php 
$url = 'https://flight-tracker-api.herokuapp.com/demo/G8320';

// use key 'http' even if you send the request to https://...
$options = array(
  'http' => array(
    // 'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, true, $context);
echo "hiiiiii";

$array = explode(' ', $result);
var_dump($array);

foreach ($array as $data){
echo $data;
}

// $jsonString='{"flight_date": "2022-07-31",
//     "flight_status": "landed",
//     "departure": {
//         "airport": "Bangalore International Airport",
//         "timezone": "Asia/Kolkata",
//         "iata": "BLR",
//         "icao": "VOBL",
//         "terminal": "1",
//         "gate": "29",
//         "delay": 15,
//         "scheduled": "2022-07-31T17:00:00+00:00",
//         "estimated": "2022-07-31T17:00:00+00:00",
//         "actual": "2022-07-31T17:14:00+00:00",
//         "estimated_runway": "2022-07-31T17:14:00+00:00",
//         "actual_runway": "2022-07-31T17:14:00+00:00"
//     },
//     "arrival": {
//         "airport": "Chhatrapati Shivaji International (Sahar International)",
//         "timezone": "Asia/Kolkata",
//         "iata": "BOM",
//         "icao": "VABB",
//         "terminal": "1",
//         "gate": "A8",
//         "baggage": null,
//         "delay": null,
//         "scheduled": "2022-07-31T18:45:00+00:00",
//         "estimated": "2022-07-31T18:45:00+00:00",
//         "actual": "2022-07-31T18:32:00+00:00",
//         "estimated_runway": "2022-07-31T18:32:00+00:00",
//         "actual_runway": "2022-07-31T18:32:00+00:00"
//     },
//     "airline": {
//         "name": "GoAir",
//         "iata": "G8",
//         "icao": "GOW"
//     },
//     "flight": {
//         "number": "320",
//         "iata": "G8320",
//         "icao": "GOW320",
//         "codeshared": null
//     },
//     "aircraft": null,
//     "live": null
// }';
// $data=json_decode($jsonString,true);
// foreach($data as $key=>$data1)
// {
//     echo $key," : ";
//     echo $data1,"\n";
// }
// echo("The data is:\n");
// echo $data->departure;
// echo $data['departure'];


// $uri = "https://flight-tracker-api.herokuapp.com/demo/G8320";

// use Httpful\Request as uri;
// $request = $uri::get();
// echo $request;







            $servername ="localhost";
            $username  ="root";
            $password="";
            $database="flight tracker";

            //create connection
            $connection = new mysqli($servername,$username,$password,$database);


            //check connection
            if($connection->connect_error)
            {
                die("Connection failed:" .$connection->connect_error);
            }
            // echo 'Departure details';
            
           

            //read all database from table
            // $query=mysqli_query("select * from flight tracker",$connection);
            $sql="SELECT * FROM aircraft";
            $result=$connection->query($sql);
            // $database=mysqli_select_db("aircraft",$connection);
            // echo $result;

            if(!$result)
            {
                die("Invalid query:" .$connection->error);
            }

            // read data from database
            while($row =$result->fetch_assoc()){
                echo'aircraft';
                echo "
    <tr>
    <td>". $row["fid"]."</td>
    <td>". $row["flight_date"]."</td>
    <td>". $row["flight_status"]."</td>
    <td>". $row["aircraft_info"]."</td>    
    <td>". $row["live"]."</td>    
    </tr>";
         }
           
            ?>  
             
        </tbody>
    </table>
</body>
</html>