import Nav from "../ui/components/Nav"
import { Routes, Route, BrowserRouter } from "react-router-dom"
import Index from "../ui/components/Index"

function App() {

  return (
    <>
    <BrowserRouter>
      <Routes>
        <Route path="/" element={ <Index /> }></Route>
        <Route path="/navegacion" element={ <Nav /> }></Route>
      </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
