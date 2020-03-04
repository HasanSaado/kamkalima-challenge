import React, { Component } from 'react';
import Card from 'react-bootstrap/Card';

class Message extends Component {

  render() {
    return (
      <Card>
        <Card.Body>
          {this.props.message}
        </Card.Body>
      </Card>
    )
  }
}
export default Message