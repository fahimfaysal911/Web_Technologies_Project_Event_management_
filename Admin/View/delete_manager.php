<html>
<head>
    <style>
        body {
            background: DodgerBlue;
        }
        .container {
            width: 380px;
            margin: 120px auto;
            background-color: cyan;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }
        input {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border-radius: 5px;
        }
        button {
            padding: 8px 10px;
            border-radius: 5px;
            border: none;
            background-color: tomato;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background: blue;
        }
    </style>
</head>

<body>
<div class="container">
    <h1>Delete Manager</h1>

    <form method="post" action="../Controller/delete_manager_validation.php">
        <input type="number" name="id" placeholder="Enter Manager ID" >
        <button type="submit">Delete</button>
    </form>

    <br>
    <a href="a_m_c_l.php"><button type="button">Back</button></a>
</div>
</body>
</html>
