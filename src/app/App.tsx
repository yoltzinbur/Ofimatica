import NavSection from "../features/nav/NavSection"
import { BrowserRouter, Routes, Route } from "react-router-dom"
import IndexSection from "../ui/components/IndexSection"

function App() {

  return (
    <>
    <BrowserRouter>
      <Routes>
        <Route path="/" element={ <IndexSection /> }></Route>
        <Route path="/navegacion" element={ <NavSection /> }></Route>
      </Routes>
    </BrowserRouter>
    </>
  )
}

export default App
