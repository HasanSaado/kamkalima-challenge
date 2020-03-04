import React, { Component } from 'react';
import { Modal, Button } from 'react-bootstrap';
import ListGroup from 'react-bootstrap/ListGroup';


export class AddFwModal_2 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            myArray: [],
            forwards: []
        }
    }
    send(player_id, team_name, player_firstname, player_secondname, value) {
        //    this.state.arr.push(event);
        var joined = this.state.myArray.concat(event);
        this.setState({ myArray: joined })
        this.props.onHide();
        this.props.hideimage_2([team_name, player_firstname, player_secondname, value, player_id]);
    }

    componentDidMount(e) {
        this._isMounted = true;
        fetch("/positions")
            .then(result => result.json())
            .then((results) => {
                if (this._isMounted) {
                    this.setState({
                        isLoaded: true,
                        forwards: results.forwards
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
    joined

    render() {
        const { forwards } = this.state;

        return (
            <Modal
                {...this.props}
                size="lg-6"
                aria-labelledby="contained-modal-title-vcenter"
                centered
            >
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Add Forward
              </Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <div className="forwardmodal" >
                        {forwards.map((forward) => (
                            <ListGroup className="row" style={{ width: '100%', height: 70,  marginTop: 5 }}>
                                <div className="col-sm-12">
                                    <ListGroup.Item action variant="light" key={forward.player_id} value={forward.position_id} onClick={this.send.bind(this, forward.player_id, forward.team_name, forward.player_firstname, forward.player_secondname, forward.value)}>
                                        <img src={"../images/" + forward.team_name + ".png"} style={{ height: 30, width: 30 }} />&nbsp;&nbsp;&nbsp;
                                        {forward.player_firstname} {forward.player_secondname} ({forward.team_shortname})   <b style={{float: 'right', alignSelf: 'stretch'}}> &nbsp; £{forward.value}M</b>
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