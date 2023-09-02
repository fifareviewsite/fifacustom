import React from 'react';
import { createRoot } from 'react-dom/client';
import '../../../scss/app.scss';

// index.blade.phpのid="select_top"を読み込む

export default function Select() {
    return (
        <div className="select_top">
        <div className="cp_ipselect cp_sl04">
        <select required>
            <option value="" hidden>4-3-1-2</option>
            <option value="1">dddaad</option>
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
  }