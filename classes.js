class laptop {
    constructor (
        make,
        model,
        color,
        harddisksize,
        screensize,
        DateAcquired,
    ) {
        this.make = make;
        this.model = model;
        this.color = color;
        this.harddisksize = harddisksize;
        this.screensize = screensize;
        this.DateAcquired = DateAcquired;
    }

    Changescreensize(new_screen_size){
        this.screensize = new_screen_size;
    }

    changecolor(new_color){
        this.color = new_color;
    }

    laptop_date(){
        let now = new Date();
        let acquired = new Date(this.DateAcquired);
        let present = now - acquired;
        let finaldate = Math.floor(present / (1000 * 3600 * 24));
        return finaldate;
    }


}

export default laptop