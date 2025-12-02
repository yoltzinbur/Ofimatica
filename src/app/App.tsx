import Nav from "../features/nav/Nav"
import { Routes, Route, HashRouter } from "react-router-dom"
import Index from "../ui/components/Index"

function App() {

  return (
    <>
    <HashRouter>
      <Routes>
        <Route path="/" element={ <Index /> }></Route>
        <Route path="/navegacion" element={ <Nav /> }></Route>
      </Routes>
    </HashRouter>
    </>
  )
}

export default App
