import React, { Component } from 'react';
import { Modal, Button } from 'react-bootstrap';
import ListGroup from 'react-bootstrap/ListGroup';


export class AddDfModal_9 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            myArray: [],
            defenders: []
        }
    }
    send(player_id, team_name, player_firstname, player_secondname, value) {
        //    this.state.arr.push(event);
        var joined = this.state.myArray.concat(event);
        this.setState({ myArray: joined })
        this.props.onHide();
        this.props.hideimage_9([team_name, player_firstname, player_secondname, value, player_id]);
    }

    componentDidMount(e) {
        this._isMounted = true;
        fetch("/positions")
            .then(result => result.json())
            .then((results) => {
                if (this._isMounted) {
                    this.setState({
                        isLoaded: true,
                        defenders: results.defenders
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


    render() {
        const { defenders } = this.state;

        return (
            <Modal
                {...this.props}
                size="lg-6"
                aria-labelledby="contained-modal-title-vcenter"
                centered
            >
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Add Defender
              </Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <div className="defendermodal" >
                        {defenders.map((defender) => (
                            <ListGroup className="row" style={{ width: '100%', height: 70,  marginTop: 5 }}>
                                <div className="col-sm-12">
                                    <ListGroup.Item action variant="light" key={defender.player_id} value={defender.position_id} onClick={this.send.bind(this, defender.player_id, defender.team_name, defender.player_firstname, defender.player_secondname, defender.value)}>
                                        <img src={"../images/" + defender.team_name + ".png"} style={{ height: 30, width: 30 }} />&nbsp;&nbsp;&nbsp;
                                        {defender.player_firstname} {defender.player_secondname} ({defender.team_shortname})   <b style={{float: 'right', alignSelf: 'stretch'}}> &nbsp; £{defender.value}M</b>
                                </ListGroup.Item>
                                </div>
                                {/* <div className="col-sm-2"  >
                                    <Button variant='warning'  ></Button>
                                </div> */}
                            </ListGroup>
                        ))}
                    </div>
                </Modal.Body>
                <Modal.Footer>
                    <Button variant='danger' onClick={this.props.onHide}>Close</Button>
                </Modal.Footer>
            </Modal>
        )
    }

}