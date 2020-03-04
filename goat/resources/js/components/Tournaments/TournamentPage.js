import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { makeStyles } from '@material-ui/core/styles';
import Table from '@material-ui/core/Table';
import ChatRoom  from '../FireBase/ChatRoom';
import TableBody from '@material-ui/core/TableBody';
import TableCell from '@material-ui/core/TableCell';
import TableContainer from '@material-ui/core/TableContainer';
import TableHead from '@material-ui/core/TableHead';
import TableRow from '@material-ui/core/TableRow';
import { Button } from 'react-bootstrap';
import Axios from 'axios';
import { BrowserRouter, Switch, Route, Link } from "react-router-dom";
import firebase from 'firebase';

class TournamentPage extends Component {

    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            tournaments: [],
            images: ["../images/number1.png", "../images/number2.png", "../images/number3.png"]
        }
    }




    componentDidMount() {
        var id = document.getElementById("myId").value;
        // Axios.get('/tournamentpage/' + id);
        this._isMounted = true;
        fetch("/tournaments_users/" + id)
            .then(res => res.json())
            .then(
                (result) => {
                    if (this._isMounted) {
                        this.setState({
                            isLoaded: true,
                            tournaments: result.tournament
                        });
                    }
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                }
            )
    }

    handleClick = (e) => {
        window.location.reload();
    }

    componentWillUnmount() {
        this._isMounted = false;
    }

    render() {
        console.log(this.state.tournaments);
        console.log(this.state.tournaments[0]);
        // var res = Math.max.apply(Math, this.state.tournaments.map(function(o) { return o.user_points; }));
        // console.log(res);
        var id = document.getElementById("myId").value;
        return (

            <div>
                
                <TableContainer>
                    <Table aria-label="simple table">
                        <TableHead>
                            <TableRow>
                                <TableCell />
                                <TableCell><b style={{fontSize: 17}}>Players</b></TableCell>
                                <TableCell align="right"><b style={{fontSize: 17}}>Total Points</b></TableCell>
                            </TableRow>
                        </TableHead>
                        <TableBody>
                            {this.state.tournaments.map((tournament, index) => (


                                <TableRow>
                                    <TableCell>
                                        <img src={this.state.images[index]} style={{ height: 30 }} />
                                    </TableCell>
                                    <TableCell component="th" scope="row">
                                        {tournament.name}
                                    </TableCell>
                                    <TableCell align="right"><b style={{color:'red'}}>{tournament.user_points}</b></TableCell>
                                </TableRow>
                            ))}
                        </TableBody>
                    </Table>
                </TableContainer>
                
            </div>
            

        );
    }
}




if (document.getElementById('tournamentpage')) {
    ReactDOM.render(<TournamentPage />, document.getElementById('tournamentpage'));
}