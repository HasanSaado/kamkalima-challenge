import React, { Component } from 'react';
import { Modal, Button } from 'react-bootstrap';
import ListGroup from 'react-bootstrap/ListGroup';


export class AddMfModal_4 extends Component {
    constructor(props) {
        super(props);
        this.state = {
            myArray: [],
            midfielders: []
        }
    }
    send(player_id, team_name, player_firstname, player_secondname, value) {
        //    this.state.arr.push(event);
        var joined = this.state.myArray.concat(event);
        this.setState({ myArray: joined })
        this.props.onHide();
        this.props.hideimage_4([team_name, player_firstname, player_secondname, value, player_id]);
    }

    componentDidMount(e) {
        this._isMounted = true;
        fetch("/positions")
            .then(result => result.json())
            .then((results) => {
                if (this._isMounted) {
                    this.setState({
                        isLoaded: true,
                        midfielders: results.midfielders
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
        const { midfielders } = this.state;

        return (
            <Modal
                {...this.props}
                size="lg-6"
                aria-labelledby="contained-modal-title-vcenter"
                centered
            >
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Add Midfielder
              </Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <div className="midfieldermodal" >
                        {midfielders.map((midfielder) => (
                            <ListGroup className="row" style={{ width: '100%', height: 70,  marginTop: 5 }}>
                                <div className="col-sm-12">
                                    <ListGroup.Item action variant="light" key={midfielder.player_id} value={midfielder.position_id} onClick={this.send.bind(this, midfielder.player_id, midfielder.team_name, midfielder.player_firstname, midfielder.player_secondname, midfielder.value)}>
                                        <img src={"../images/" + midfielder.team_name + ".png"} style={{ height: 30, width: 30 }} />&nbsp;&nbsp;&nbsp;
                                        {midfielder.player_firstname} {midfielder.player_secondname} ({midfielder.team_shortname})   <b style={{float: 'right', alignSelf: 'stretch'}}> &nbsp; £{midfielder.value}M</b>
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