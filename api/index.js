const express = require('express')
const mysql = require("mysql")


const conn = mysql.createConnection({
    host: "localhost",
    user: "aastu",
    password: "myaastu_pwd",
    database: "myaastu"
})

const app = express()

app.get('/search', (req, res) => {
    const sql = "SELECT * FROM post WHERE title LIKE CONCAT('%', ? ,'%')"
    conn.query(sql, req.query['q'], (err, result, fields) => {
        if (err) console.error(err)
        else
            res.json([req.query, result])
        res.end();
    })
})

app.listen(5500, () => console.log(`Server started on http://localhost:5000.`))