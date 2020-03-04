import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import trim from 'trim';


class MessageBox extends Component {

  constructor(props) {
    super(props);
    this.onChange = this.onChange.bind(this);
    this.onKeyup = this.onKeyup.bind(this);
    this.state = {
      error: null,
      isLoaded: false,
      message: '',
      users: []
    };
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

  onChange(e) {
    this.setState({
      message: e.target.value
    });
  }
  onKeyup(e) {
    const chat_id=document.getElementById("chat_id").value;
    console.log(chat_id)
    if (e.keyCode === 13 && trim(e.target.value) !== '') {
      e.preventDefault();
      let dbCon = this.props.db.database().ref(`/messages/`+chat_id);
      dbCon.push({
        message: trim(e.target.value),
        Key: this.state.users.name
      });
      this.setState({
        message: ''
      });
    }
  }
  render() {
    
    return (
      <form>
        <textarea
        style={{width:"500px"}}
          className="textarea"
          placeholder="Type a message"
          // cols="50"
          onChange={this.onChange}
          onKeyUp={this.onKeyup}
          value={this.state.message}>
        </textarea>
      </form>
    )
  }
}

export default MessageBox