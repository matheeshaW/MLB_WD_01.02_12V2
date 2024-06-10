<!--Amarasekara D.I.-->
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            margin:auto;
            align-item:center;
            justify-content:center;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 6px 12px;
            margin-right: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-update {
            background-color: #4CAF50;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
require 'config.php';

// Fetch data from the database
$sql = "SELECT * FROM insures";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "<table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["message"]."</td>
                <td>
                    <button class='btn btn-update' onclick='updateRow(".$row["id"].")'>Update</button>
                    <button class='btn btn-delete' onclick='deleteRow(".$row["id"].")'>Delete</button>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p>No results found.</p>";
}

$con->close();
?>
<div id='updateModal' style='display: none;'>
    <div id='updateForm'></div>
</div>
<script>
    function updateRow(id) 
    {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                showModal(this.responseText);
            }
        };
        xhttp.open('GET', 'update_form.php?id=' + id, true);
        xhttp.send();
    }

    function showModal(content) 
    {
        // Create modal element
        var modal = document.createElement('div');
        modal.classList.add('modal');

        // Add content to modal
        modal.innerHTML = content;

        // Append modal to body
        document.body.appendChild(modal);

        // Display modal
        modal.style.display = 'block';

        // Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
                modal.remove();
            }
        };
    }

    function deleteRow(id) 
    {
        
        if (confirm('Are you sure you want to delete this record?')) {
            
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    
                    window.location.reload();
                }
            };
            xhttp.open('GET', 'delete_record.php?id=' + id, true);
            xhttp.send();
        }
    }
</script>
</body>
</html>