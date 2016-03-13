import React from 'react';

var JSONConsoleComponent = React.createClass({
    render: function() {
        return (
            <div className="JSONConsoleComponent">
                <pre>{JSON.stringify(this.props.json, null, 4)}</pre>
            </div>
        );
    }
});

export default JSONConsoleComponent;