<table border=1>
    <tr>
        <td>S.No</td>
        <td>Name</td>
        <td>Email</td>
    </tr>
     <tr>
        <td>1</td>
        <td>Raj</td>
        <td>aman23@gmail.com</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Aman</td>
        <td>aman23@gmail.com</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Anvar</td>
        <td>aman23@gmail.com</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Ankitt</td>
        <td>aman23@gmail.com</td>
    </tr>
</table>
<!-- <?php
$user=[
    [1,"Shivam","shivam@gmail.com" ],
    [2,"Shiv","shiv@gmail.com" ],
    [3,"Shiva","shiva@gmail.com" ],
    [4,"vam","vam@gmail.com" ],
    [5,"Shivami","shivami@gmail.com" ],
];
echo "<table border =1";
for($i=0;$i<count($user);$i++){
   echo "<tr>";
    for($j=0;$j<count($user[$i]);$j++){
        echo "<td>";
        echo $user[$i][$j]."<br>";
        echo "</td>";

    }
    echo "</tr>";
}
echo "</table";
echo "<br>";
?> -->

<?php
$arrs=[
    ["name"=>"anil","age"=>29,"email"=>"anil@gmail.com","city"=>"gzb"],
    ["name"=>"il","age"=>9,"email"=>"il@gmail.com","city"=>"gzb"],
    ["name"=>"nil","age"=>59,"email"=>"nil@gmail.com","city"=>"gzb"],
    ["name"=>"manil","age"=>79,"email"=>"manil@gmail.com","city"=>"gzb"],
];

echo "<table border =1>";
foreach($arrs as $data){
    echo "<tr>";
    foreach($data as $key=>$item){
        echo "<td>";
        echo $key ."is" .$item;
        echo "<br>";
        echo "</td>";

    }
    echo "<br>";
    echo "</tr>";
}
echo "</tr>";
?>
