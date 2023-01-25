var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "bt5",
  password: "bt5pw",
  database: "bt5"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
  var sql = "INSERT INTO umfrageLernW (ID, jugName, prefrage, frage1, frage2, frage3, frage4, frage5, frage6) VALUES ('Company Inc', 'Highway 37')";
  con.query(sql, function (err, result) {
    if (err) throw err;
    console.log("1 record inserted");
  });
});