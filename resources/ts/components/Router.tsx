import { BrowserRouter, Routes, Route, } from "react-router-dom";

import Home from "./Home";
import PageA from "./PageA";
import { Button_c } from "./Button";

import { createRoot } from 'react-dom/client';

// index.blade.phpのid="select_top"を読み込む
const app = document.getElementById('app');
const root = createRoot(app!); // createRoot(container!) if you use TypeScript

function App() {
    return (
        <div>
        <BrowserRouter>
            <Routes>
                <Route exact path="/" element={<Home/>}/>
                <Route path="/page_a" element={<PageA/>}/>
            </Routes>
        </BrowserRouter>
        </div>
    )
}

root.render(<App />);
