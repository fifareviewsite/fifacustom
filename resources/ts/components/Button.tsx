import React from "react";
import { Link } from "react-router-dom";
import Button from '@mui/material/Button';
export const Button_c = () => <Button variant="contained">Hello World</Button>;
export class Square extends React.Component {
    render() {
      return (
        <button className="square">
          {/* TODO */}
        </button>
      );
    }
  }

  const MyTag: React.FC<{title : string; }> = (props) => {
    return <div>{props.title}</div>;
  }

  const Container: React.FC = () => {
    return <MyTag title="こんばんわ" />;
  }