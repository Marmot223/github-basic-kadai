<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>
<body>

<h2>入力内容をご確認ください</h2>

<table border="1" cellpadding="8">

<tr>
    <th>社員名</th>
    <td><?php echo $_POST['employee_name']; ?></td>
</tr>

<tr>
    <th>年齢</th>
    <td><?php echo $_POST['employee_age']; ?></td>
</tr>

<tr>
    <th>所属部署</th>
    <td><?php echo $_POST['department']; ?></td>
</tr>

</table>

<br>

<form action="complete.php" method="post">

<input type="hidden" name="employee_name" value="<?php echo $_POST['employee_name']; ?>">
<input type="hidden" name="employee_age" value="<?php echo $_POST['employee_age']; ?>">
<input type="hidden" name="department" value="<?php echo $_POST['department']; ?>">

<input type="submit" value="確定">

</form>

<br>

<form action="form.php" method="get">
    <input type="submit" value="キャンセル">
</form>

</body>
</html>