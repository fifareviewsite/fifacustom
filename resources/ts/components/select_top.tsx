import React from 'react';
import { createRoot } from 'react-dom/client';

// index.blade.phpのid="select_top"を読み込む
const selet_top = document.getElementById('select_top');
const root = createRoot(selet_top!); // createRoot(container!) if you use TypeScript

root.render(
    <div className="select_top">
    <div className="cp_ipselect cp_sl04">
    <select required>
        <option value="" hidden>4-3-1-2</option>
        <option value="1">cat</option>
        <option value="2">dog</option>
        <option value="3">rabbit</option>
        <option value="4">squirrel</option>
    </select>
    </div>
    <div className="cp_ipselect cp_sl04">
    <select required>
        <option value="" hidden>評価が高い順</option>
        <option value="1">cat</option>
        <option value="2">dog</option>
        <option value="3">rabbit</option>
        <option value="4">squirrel</option>
    </select>
    </div>
</div>
);