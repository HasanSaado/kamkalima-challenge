import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Form from 'react-bootstrap/Form';
import { Button, Card } from 'react-bootstrap';
import { SuccessTournament } from './SuccessTournament';
import Axios from 'axios';

class CreateTournamentForm extends Component {

    constructor(props){
        super(props);
        this.state = {
            tournament_name: '',
            alert_message: ''
        }
    }

    onChange = (e) => {
        this.setState({
            tournament_name: e.target.value
        })
        console.log(this.state.tournament_name)
    }

    handleSubmit = (e) => {
        // console.log('ok');
        // e.preventDefault();
        Axios.post('/create_tournament',{
            tournament_name: this.state.tournament_name
        }).then(res => {
            this.setState({ alert_message: 'success' })
        });
    }

    render() {
        return (
            <div>
                <hr />
                {this.state.alert_message == 'success' ? <SuccessTournament /> : null}
                <Card border="warning" style={{ width: '25rem' }}>
                    <Card.Header style={{ textAlign: 'center'}}>Add Tournament</Card.Header>
                    <Form onSubmit={e => { e.preventDefault(); }}>
                        <Form.Group controlId="formBasicEmail">
                            <Form.Control type="text" placeholder="Tournament Name" value={this.state.tournament_name} onChange={this.onChange}/>
                            <Form.Text className="text-muted" >
                        </Form.Text>
                        </Form.Group>
                        <Button variant="danger" type="submit" style={{ marginLeft: '40%'}} onClick={this.handleSubmit}>
                            Submit
                    </Button>
                    </Form>
                </Card>
            </div>
        );
    }
}
if (document.getElementById('createtournament')) {
    ReactDOM.render(<CreateTournamentForm />, document.getElementById('createtournament'));
}