const mysql = require("mysql")

exports.conn = mysql.createConnection({
    host: "localhost",
    user: "aastu",
    password: "myaastu_pwd",
    db: "myaastu"
})
