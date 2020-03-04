import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { MDBTable, MDBTableBody, MDBTableHead } from 'mdbreact';

class ShowFormation extends Component {

    constructor(props) {
        super(props);
        this.state = {
            positions: [],
            players: [],
            isLoaded: false
        }

    }

    componentDidMount(e) {
        this._isMounted = true;
        fetch("/positions")
            .then(result => result.json())
            .then((results) => {
                if (this._isMounted) {
                    this.setState({
                        isLoaded: true,
                        positions: results.positions,
                        players: results.players
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

    componentWillUnmount() {
        this._isMounted = false;
    }

    render () {

        const { positions, players } = this.state;

        return (
            <div>
                <MDBTable>
                    {positions.map((position, i) => (
                        <MDBTableBody>
                            <tr>
                                <td>
                                    {}
                                </td>
                            </tr>
                        </MDBTableBody>
                    ))}
                </MDBTable>
            </div>
        )
    }

}

ReactDOM.render(<ShowFormation />, document.getElementById('showformation'));