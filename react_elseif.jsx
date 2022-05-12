{someCondition === true ? (
    <IfComponent/>
) : someOtherCondition === true ? (
    <ElseIfComponent/>
) : (
    <ElseComponent/>
)}

{courierFile.name  ?
    <small className="text-primary">{courierFile.name}</small>
 :
    <small className="text-dark mb-0">{typeCourierFile(courierFile.type).label}</small>
}
