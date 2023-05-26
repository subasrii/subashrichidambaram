var mysql =require('mysql');
var express = require('express');
var session = require('express-session');
var bodyParser = require('body-parser');
var path = require('path');
var ejs=require('ejs');

var con = mysql.createConnection({
	host     : 'localhost',
	user     : 'root',
	password : '',
	database : 'reg'
});

var app = express();
app.use(bodyParser.urlencoded({extended : false}));
app.use(bodyParser.json());
app.use(express.static('public'));
app.set('view engine','ejs');
app.listen(8080);
app.get('/', function(req, res) {
	res.render('pages/index')
});
app.use(session({
	secret: 'secret',
	resave: true,
	saveUninitialized: true
}));

app.post('/auth', function(req, res) {
	var name = req.body.name;
	var password = req.body.password;
	if (name && password) {
		con.query('SELECT * FROM r1 WHERE name = ? AND password = ?', [name, password], function(error, results, fields) {
			if (results.length > 0) {
				req.session.loggedin = true;
				req.session.name = name;
				 res.redirect('/');
                console.log("login sucess");
			} else {
				console.log("invalid username and password");
				res.redirect('/errorpage');
			}			
			res.end();
		});
	} else {
		console.log('Please enter Username and Password!');
		res.redirect('/errorpage');
		res.end();
	}
});



app.post('/vlogin',function(req,res,next){
    var name=req.body.name;
    var password=req.body.password;
    if(name="rkmbs")
    {
        if(password=="mbs")
        {
          console.log("login success");
          res.redirect('/view');
        }
    else
    {
     console.log("Invalid password");
     res.redirect('/errorpage');
    }
}
else{
    console.log("Invalid username");
    res.redirect('/errorpage');
}
    });


		
// 		if (req.session.loggedin) {
// 			staffid = req.session.staffid
// 			staffname = req.session.staffname
// 			department = req.session.department
// 			email = req.session.email
// 			officenumber = req.session.officenumber
// 			password  = req.session.password
// 			confirmpassword  = req.session.confirmpassword
// 			position = req.session.position
// 			var sql = "SELECT * FROM staff WHERE staffname = '"+ staffname + "'";
// 			con.query( sql, function ( err, resultSet ) {
	
// 				if ( err ) throw err;
			
				
// 				 catfood = resultSet[0].catfood;
				
			
// 			});
			
// 			res.render('pages/staffview',{data:rows})
// 			res.end();
			  
			
// 		} else {
			
			
// 			res.send('Please login to view this page! <a href="stafflogin">login</a>');
// 		}
// 		res.end();
// 	});
app.get('/login', function(req, res) {
	res.render('pages/login')
});
app.get('/', function(req, res) {
	res.render('pages/index')
});
app.get('/view', function(req, res) {
	res.render('pages/view')
});
app.get('/loginview', function(req, res) {
	res.render('pages/loginview')
});

// save
app.post('/save',function(req,res,next){
    var name=req.body.name;
    var lastname=req.body.lastname;
    var password =req.body.password;
    var reenterpassword=req.body.reenterpassword;
    var email=req.body.email;
    var mobile=req.body.mobile;
    var address=req.body.address;
    var gender=req.body.gender;
    var hobbies=req.body.hobbies;
    var dob=req.body.dob;
    var country=req.body.country;
    var query="insert into r1(name,lastname,password,reenterpassword,email,mobile,address,gender,hobbies,dob,country) values('"+req.body.name+"','"+req.body.lastname+"','"+req.body.password+"','"+req.body.reenterpassword+"','"+req.body.email+"','"+req.body.mobile+"','"+req.body.address+"','"+req.body.gender+"','"+req.body.hobbies+"','"+req.body.dob+"','"+req.body.country+"')";
    con.query(query,function(err,result){
    if(err)
    {
    throw err;
    }
    else
    {
     console.log("Inserted Successfully");
    }
    res.redirect('pages/index');
    });
    });

	
 
	app.post('/update',function(req,res,next){
        var name=req.body.name;
        var lastname=req.body.lastname;
        var password =req.body.password;
        var reenterpassword=req.body.reenterpassword;
        var email=req.body.email;
        var mobile=req.body.mobile;
        var address=req.body.address;
        var gender=req.body.gender;
        var hobbies=req.body.hobbies;
        var dob=req.body.dob;
        var country=req.body.country;
	
 var query="update r1 set lastname='"+req.body.lastname+"',password='"+req.body.password+"',reenterpassword='"+req.body.reenterpassword+"',email='"+req.body.email+"',mobile='"+req.body.mobile+"',address='"+req.body.address+"',gender='"+req.body.gender+"',hobbies='"+req.body.hobbies+"',dob='"+req.body.dob+"',country='"+req.body.country+"' where name='"+req.body.name+"'";
 con.query(query,function(err,result){
	 if(err)
 {
 throw err;
 }
 else
 {
  console.log("update Successfully");
 }
  res.redirect('/');
	 });
 });
 
	
 app.post('/delete',function(req,res,next){
	 var name=req.body.name;
	 var query="delete * from r1 where  name='"+req.body.name+"'";
	 con.query(query,function(err,result){
		 if(err)
	 {
	 throw err;
	 }
	 else
	 {
	  console.log("deleted Successfully");
	 }
	  res.redirect('/');
		 });
	 });

     
        app.get('/view',function(req,res,next){
            con.query('SELECT * from r1',function(err,rows){
                if(err)
                {
               res.render('/',{data:''})
                }
                else
                {
                    res.render('pages/view',{data:rows})
                }
                
                });
            });
