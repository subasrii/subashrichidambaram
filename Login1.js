import React,{useState} from 'react'

function Login1() {
    const[email,setemail]=useState("")
    const[pass,setpass]=useState("")
    const[name,setname]=useState("")
    function submitHandler(){
        if(name==="rk" & email==="admin@admin.com"&pass==="123"){
            alert("success")
        }
        else{
            alert("failed")
        }
    }
  return (
    <form onSubmit={submitHandler}>
        <div>
            <label htmlFor="name">name:</label>
            <input type="text" value={name} onChange={(e)=>setname(e.target.value)}>
                  </input>
        </div>
        <div>
            <label htmlFor="email">Email:</label>
            <input type="text" value={email} onChange={(e)=>setemail(e.target.value)}>
                  </input>
        </div>
        <div>
            <label htmlFor="pass">password:</label>
            <input type="password" value={pass} onChange={(e)=>setpass(e.target.value)}>
                  </input>
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>
  )
}

export default Login1