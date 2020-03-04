import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Message from './Message';
import _ from 'lodash';
import Card from 'react-bootstrap/Card';


class MessageList extends Component {
  constructor(props) {
    super(props);
    this.state = {
      messages: [],
      error: null,
      isLoaded: false,
      message: '',
      users: []
    };
    let app = this.props.db.database().ref('messages');
    app.on('value', snapshot => {
      this.getData(snapshot.val());
    });

  }

  componentDidMount(e) {
    this._isMounted = true;
    fetch("/all_tournaments")
      .then(result => result.json())
      .then((results) => {
        if (this._isMounted) {
          this.setState({
            isLoaded: true,
            users: results.users
          })
        }
      },
        (error) => {
          this.setState({
            isLoaded: true,
            error
          })
        })
  }


  getData(values) {
    const chat_id = document.getElementById("chat_id").value;

    let messagesVal = values[chat_id];
    let messages = _(messagesVal)

      .keys()
      .map(messageKey => {
        let cloned = _.clone(messagesVal[messageKey]);
        cloned.key = messageKey;
        return cloned;
      })
      .value();
    this.setState({
      messages: messages
    });
  }

  printMessages() {
    return this.state.messages.map((msg, index) =>
      this.props.user_id === msg.user_id ? (
        <div className="mine group-messages" key={index}>
          <div className="group-message last">
            <p>{msg.message}</p>
          </div>
        </div>
      ) : (
          <div className="yours group-messages" key={index}>
            <small className="text-dark" style={{ marginLeft: "10px" }}>
              {msg.username}
            </small>
            <div className="group-message last">
              <p>{msg.message}</p>
            </div>
          </div>
        )
    );
  }

  render() {
    console.log(this.state.messages)
    let messageNodes = this.state.messages.map((msg, index) =>{
        return(
      this.state.users.name === msg.Key ? (
        <div className="mine group-messages" key={index}>
          <div className="group-message last">
            <p>{msg.message}</p>
          </div>
        </div>
      ) : (
          <div className="yours group-messages" key={index}>
            <div className="group-message last">
            <small className="text-dark" style={{ marginLeft: "10px" }}>
              {msg.Key}:
            </small>
            
              <p>{msg.message}</p>
            </div>
          </div>
        )
    
      );}
    );
    // this.state.messages.map((message) => {
    //   return (
    //     <div >
    //       <div >
    //         {message.Key}: <Message message={message.message} />

    //       </div>
    //     </div>
    //   )
    // });
    return (
      <Card className="chatlist">
        {messageNodes}
      </Card>
    );
  }
}

export default MessageList