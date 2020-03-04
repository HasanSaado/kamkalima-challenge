import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Button } from 'react-bootstrap';
import Table from 'react-bootstrap/Table';
import { BrowserRouter, Switch, Route, Link } from "react-router-dom";
import Axios from 'axios';

class ViewAllTournaments extends Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            tournaments: [],
            joined_tournament: '',
        }
    }
    componentDidMount() {
        this._isMounted = true;
        fetch("/view_tournaments")
            .then(res => res.json())
            .then(
                (result) => {
                    if (this._isMounted) {
                        this.setState({
                            isLoaded: true,
                            tournaments: result.tournaments
                        });
                        // console.log('hamburger');
                    }
                    console.log(this.state.tournaments)
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                }
            )
    }

    componentWillUnmount() {
        this._isMounted = false;
    }

    handleClick = (e) => {
        window.location.reload();
    }

    joinTournament = (event) => {
        this.setState({ joined_tournament: event },
            this.addTo
        );
    }


    addTo = () => {
        Axios.post('/join_tournament', {
            joined_tournament: this.state.joined_tournament
        })
    }


    render() {
        const { tournaments } = this.state;

        return (

            <Table striped bordered hover variant="dark">
                <thead>
                    <tr>
                        <th className="th">Name</th>
                        <th className="th">Creator</th>
                    </tr>
                </thead>
                {tournaments.map((tournament) => (
                    <tbody key={tournament.tournament_id}>
                        <tr className="games">
                            <td>{tournament.tournament_name}</td>
                            <td>{tournament.name}</td>
                            <td onClick={this.handleClick}>
                                <BrowserRouter>
                                    <Link to={"/tournamentpage/" + tournament.tournament_id} >
                                        <Button variant="warning">View</Button>
                                    </Link>
                                </BrowserRouter>
                            </td>
                            <td onClick={this.joinTournament.bind(this, tournament.tournament_id)}>
                                <Button variant="danger">Join</Button>
                            </td>
                        </tr>
                    </tbody>
                ))}
            </Table>
        )
    }
}

if (document.getElementById('viewtournaments')) {
    ReactDOM.render(<ViewAllTournaments />, document.getElementById('viewtournaments'));
}