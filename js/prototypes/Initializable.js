function Initializable(params) {
    this.initialize = function(key, def, private) {
        if (def !== undefined) {
            (!!private ? params : this)[key] = (params[key] !== undefined) ? params[key] : def;
        }
    };
}
