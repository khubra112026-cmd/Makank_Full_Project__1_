<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style.css">

<!-- Firebase Integration -->
<script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.12.2/firebase-database.js"></script>

<script>
const firebaseConfig = {
    databaseURL: "https://makank-74530-default-rtdb.firebaseio.com/"
};
const app = firebase.initializeApp(firebaseConfig);
const db  = firebase.database();
console.log("Firebase Connected");
</script>

</head>
<body>
