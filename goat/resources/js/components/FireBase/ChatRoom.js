import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import MessageList from './MessageList';
import Header from './Header';
import MessageBox from './MessageBox';
import firebase from 'firebase';

class ChatRoom extends Component {
    constructor(props) {
        super(props);
        var config = {
            apiKey: "AIzaSyBTN7I165_QQtWX16pD-mbuDwsAKixoVlc",
            authDomain: "goat-4aa69.firebaseapp.com",
            databaseURL: "https://goat-4aa69.firebaseio.com",
            projectId: "goat-4aa69",
            storageBucket: "goat-4aa69.appspot.com",
            messagingSenderId: "33005324117",
            appId: "1:33005324117:web:3d700b914aa033560651dc",
            measurementId: "G-YKSEK080DG"
        };
        this.state = {
            chat_id: 0,
            conversations: [],
            convo_user: ""
        };
        firebase.initializeApp(config);
    }

   
    render() {
        
        return (
            <div className="container">
                <div className="columns">
                    <div className="column is-3"></div>
                    <div className="column is-6">
                        <MessageList db={firebase} />
                    </div>
                </div>
                <div className="columns">
                    <div className="column is-3"></div>
                    <div className="column is-6">
                        <MessageBox db={firebase} />
                    </div>
                </div>
            </div>
        );
    }
}

// export default ChatRoom
if (document.getElementById('firebase')) {
    ReactDOM.render(<ChatRoom />, document.getElementById('firebase'));
}