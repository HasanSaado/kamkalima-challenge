import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Table } from 'react-bootstrap';
// import { match } from 'minimatch';

class Match extends Component {

    constructor(props) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            matches: []
        }
    }

    componentDidMount() {

        fetch("/match")
            .then(res => res.json())
            .then(
                (result) => {

                    this.setState({
                        isLoaded: true,
                        matches: result.matches.data.fixtures
                    });
                    // console.log('hamburger');


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

    render() {
        console.log(this.state.matches)
        return (
            <div className="Table">

                <Table striped bordered hover variant="dark" >
                    <thead>
                        <tr>
                            <th className="th">Date</th>
                            <th className="th">Time</th>
                            <th className="the">Match</th>
                        </tr>
                    </thead>
                    {this.state.matches.map((match) => (
                        <tbody key={match.id}>
                            <tr className="games">
                                <td>{match.date}</td>
                                <td>{match.time}</td>
                                <td>
                                    <img src={"../images/" + match.home_name + "_Logo.png"} style={{ height: 30, width: 30 }} />
                                    &nbsp;
                            {match.home_name}
                                    &nbsp; vs. &nbsp;
                            {match.away_name}
                                    &nbsp;
                            <img src={"../images/" + match.away_name + "_Logo.png"} style={{ height: 30, width: 30 }} />

                                </td>

                            </tr>
                        </tbody>
                    ))}
                </Table>
            </div>
        )
    }


}



if (document.getElementById('match')) {
    ReactDOM.render(<Match />, document.getElementById('match'));
}