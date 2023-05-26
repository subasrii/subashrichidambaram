import logo from './logo.svg';
import './App.css';
// import Sample1 from './components/Sample1'
// import Sample2 from './components/Sample2'
// import Sample3 from './components/Sample3'
// import Form from './components/Form'
import Login1 from './components/Login1'
// import Frag from './components/Frag'
function App() {
  return (
    <div className="App">
     <img src={logo} className="App-logo" alt="logo" />
       {/* <Sample1 />
       <Sample2 />s
       <Sample3 /> */}
     
      {/* <Form/> */}
      <Login1/>
      {/* <Frag /> */}
        
    </div>
  );
}

export default App;
