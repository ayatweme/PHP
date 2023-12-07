<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Advanced Tasks</title>
</head>
<style>
    input[type="button"] {
        width: 50px;
        height: 50px;
        font-size: 16px;
    }
</style>

<body>
    <h3>Task 1</h3>
    <form action="action.php" method="post">
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Submit" name="task1">
    </form>
    <h3>Task 2</h3>

    <form action="action.php" method="get">
        URL: <input type="text" name="url" required>
        <input type="submit" value="GO">
    </form>
    <h3>Task 3</h3>

    <table>
        <tr>
            <td colspan="4"><input type="text" id="display" disabled></td>
        </tr>
        <tr>
            <td><input type="button" value="7" onclick="appendToDisplay('7')"></td>
            <td><input type="button" value="8" onclick="appendToDisplay('8')"></td>
            <td><input type="button" value="9" onclick="appendToDisplay('9')"></td>
            <td><input type="button" value="/" onclick="appendToDisplay('/')"></td>
        </tr>
        <tr>
            <td><input type="button" value="4" onclick="appendToDisplay('4')"></td>
            <td><input type="button" value="5" onclick="appendToDisplay('5')"></td>
            <td><input type="button" value="6" onclick="appendToDisplay('6')"></td>
            <td><input type="button" value="-" onclick="appendToDisplay('-')"></td>
        </tr>
        <tr>
            <td><input type="button" value="1" onclick="appendToDisplay('1')"></td>
            <td><input type="button" value="2" onclick="appendToDisplay('2')"></td>
            <td><input type="button" value="3" onclick="appendToDisplay('3')"></td>
            <td><input type="button" value="+" onclick="appendToDisplay('+')"></td>
        </tr>
        <tr>
            <td><input type="button" value="0" onclick="appendToDisplay('0')"></td>
            <td><input type="button" value="." onclick="appendToDisplay('.')"></td>
            <td><input type="button" value="=" onclick="calculate()"></td>
            <td><input type="button" value="*" onclick="appendToDisplay('*')"></td>
        </tr>
        <tr>
            <td colspan="4"><input type="button" value="C" onclick="clearDisplay()"></td>
        </tr>
    </table>

    <h3>Task 4</h3>
    <h2>To-Do List</h2>
    <ul id="taskList"></ul>
    <input type="text" id="taskInput" placeholder="New task...">
    <button onclick="addTask()">Add Task</button>

    <script>
        function addTask() {
            var taskInput = document.getElementById("taskInput");
            var taskList = document.getElementById("taskList");

            if (taskInput.value !== "") {
                var newTask = document.createElement("li");
                newTask.appendChild(document.createTextNode(taskInput.value));
                taskList.appendChild(newTask);
                taskInput.value = "";
            }
        }
    </script>

    <script>
        function appendToDisplay(value) {
            document.getElementById("display").value += value;
        }

        function clearDisplay() {
            document.getElementById("display").value = "";
        }

        function calculate() {
            try {
                document.getElementById("display").value = eval(document.getElementById("display").value);
            } catch (error) {
                document.getElementById("display").value = "Error";
            }
        }
    </script>

</body>

</html>