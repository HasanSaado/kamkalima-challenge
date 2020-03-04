import React, { Component } from 'react';
import { Alert } from 'react-bootstrap';

export class SuccessTournament extends Component {

    render() {
        return (
            <Alert variant="secondary" style={{width: '400px'}}>
                Your Tournament Is Created Successfully!
            </Alert>
        )
    }
}